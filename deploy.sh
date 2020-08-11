git add .
git commit -m "update"
git push
php artisan apidoc:generate
sls deploy --aws-profile budgit