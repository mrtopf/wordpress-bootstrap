build:
	lessc library/less/wp.less library/css/bootstrap.css;
	lessc library/less/responsive.less library/css/responsive.css;
	echo "CSS successfully build! - `date`"

watch:
	echo "watching less files"; \
	/usr/local/bin/watchmedo shell-command --patterns="*.less" --recursive --command="make" library/less

.PHONY: build watch

