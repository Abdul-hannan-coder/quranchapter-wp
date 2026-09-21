#!/bin/bash
USER="admin"
PASS="AWVf L3dQ LWAv TYKP 3w6B SbNQ"
URL="https://quranchapter.com/wp-json/wp/v2/media"
AUTH=$(echo -n "$USER:$PASS" | base64 | tr -d '\n')

for file in assets/*; do
  if [ -f "$file" ]; then
    filename=$(basename "$file")
    mimetype=$(file -b --mime-type "$file")
    echo "Uploading $filename ($mimetype)..."
    curl -s -X POST \
      -H "Authorization: Basic $AUTH" \
      -H "Content-Disposition: attachment; filename=\"$filename\"" \
      -H "Content-Type: $mimetype" \
      --data-binary "@$file" \
      "$URL" > /dev/null
    echo "Done: $filename"
  fi
done
