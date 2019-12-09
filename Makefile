TAG=cerdom

RUN=docker run --rm \
	-v $(CURDIR):/go/src/$(SVC) \
	-w /go/src/$(SVC)

build:
	docker build . -t ${TAG}

run:
	docker-compose up