FROM alpine:3.11
RUN apk update && apk add nodejs
COPY . /app
WORKDIR /app
CMD ["node", "./web/index.js"]
