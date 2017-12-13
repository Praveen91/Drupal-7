# Create and applying patches with Git

### Patched modules

For modules can not be patched which containing modifications to composer.json files or the it's dependencies in MODULE_NAME.info files.

1. Manually download the module, add exact it into some folder, e.g, foo.
2. `cd foo`, and run `git init && git add -A && git commit -m "Init commit"`,
3. Make changes.  
4. Generate patch `git diff>foo.VERSION_NUMBER.backup.patch`, VERSION_NUMBER is a placeholder here.
5. Remove git files, run `rm -rf .git`, we donot need it anymore, it's only help us to generate the patch file.
6. Move the modified version with the patch file in it into `sites/all/modules/patched`

### Obtaining and applying a patch file

Use `curl` to download the file, then use git to apply the patch:

curl -O https://www.drupal.org/files/[patch-name].patch
git apply [patch-name].patch

Or in a single line:
curl https://www.drupal.org/files/[patch-name].patch | git apply -

Alternatively, use `wget` to download the file, then use git to apply the patch:

wget https://www.drupal.org/files/[patch-name].patch
git apply [patch-name].patch

Or in a single line:
wget -q -O - https://www.drupal.org/files/[patch-name].patch | git apply -
