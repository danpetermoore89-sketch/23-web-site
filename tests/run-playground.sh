#!/bin/sh
set -eu

child_dir=$(CDPATH= cd -- "$(dirname -- "$0")/.." && pwd)
parent_dir=${1:-"$(dirname -- "$child_dir")/23 Web Website"}
plugin_dir=${2:-"$(dirname -- "$child_dir")/23 Core Plugin"}

if [ ! -f "$parent_dir/style.css" ]; then
	echo "23 Theme was not found at: $parent_dir" >&2
	exit 1
fi

if [ ! -f "$plugin_dir/twentythree-core.php" ]; then
	echo "23 Core was not found at: $plugin_dir" >&2
	exit 1
fi

for blueprint in blueprint-6.6.json blueprint-current.json; do
	result_dir=$(mktemp -d "${TMPDIR:-/tmp}/twentythree-web-qa.XXXXXX")
	echo "Running $blueprint"
	npx --yes @wp-playground/cli@latest run-blueprint \
		--mount "$parent_dir:/wordpress/wp-content/themes/twentythree-theme" \
		--mount "$child_dir:/wordpress/wp-content/themes/twentythree-web" \
		--mount "$plugin_dir:/wordpress/wp-content/plugins/twentythree-core" \
		--mount "$result_dir:/wordpress/qa-results" \
		--define TWENTYTHREE_WEB_QA_OUTPUT /wordpress/qa-results/report.json \
		--define-bool WP_DEBUG true \
		--define-bool WP_DEBUG_DISPLAY false \
		--blueprint "$child_dir/tests/$blueprint" \
		--verbosity normal
	cat "$result_dir/report.json"
	echo "Report retained at: $result_dir/report.json"
done
