build:
	lessc library/less/wp.less library/css/bootstrap.css;
	echo "CSS successfully build! - `date`"

watch:
	echo "watching less files"; \
	/opt/python/2.7/bin/watchmedo shell-command --patterns="*.less" --recursive --command="make" library/less

.PHONY: build watch

