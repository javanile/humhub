#!/usr/bin/env bash

find ./protected/humhub/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/INT(1)/integer/g" {} +
find ./protected/humhub/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/int(1)/integer/g" {} +
find ./protected/humhub/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/INT(11)/integer/g" {} +
find ./protected/humhub/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/int(11)/integer/g" {} +
find ./protected/humhub/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/int(10)/integer/g" {} +
find ./protected/humhub/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/int(4)/integer/g" {} +
find ./protected/humhub/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/tinyinteger/smallint/g" {} +
find ./protected/humhub/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/tinytext/text/g" {} +
find ./protected/humhub/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/DATETIME/timestamp/g" {} +
find ./protected/humhub/ -type f -path '*/migrations/*' -name '*.php' -exec sed -i "s/longblob/bytea/g" {} +
