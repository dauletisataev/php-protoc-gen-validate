PHP_OUT_PATH=./gen/src; \
PROTO_PATH=./proto; \
protoc --php_out=$PHP_OUT_PATH \
    --grpc-php_out=composer_name=grpc/hello:out \
    --plugin=protoc-gen-grpc-php=./vendor/bin/protoc-gen-grpc-php \
    --validate_out="lang=php:./out" \
    -I $PROTO_PATH person.proto \
    -I ${GOPATH}/src/github.com/envoyproxy/protoc-gen-validate/bin \


# protoc --php_out=$PHP_OUT_PATH \
#        --grpc-php_out=composer_name=grpc/hello:out \
#     --plugin=protoc-gen-grpc-php=./vendor/bin/protoc-gen-grpc-php \
#     ./helloworld.proto

# protoc \
#   -I . \
#   -I ${GOPATH}/src \
#   -I ${GOPATH}/src/github.com/envoyproxy/protoc-gen-validate \
#   --go_out=":../generated" \
#   --validate_out="lang=go:../generated" \
#   example.proto