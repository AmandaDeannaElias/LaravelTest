# Resources
#### https://medium.com/hackernoon/a-beginners-guide-to-building-a-rest-api-with-laravel-5c717afd77fe
#### https://www.youtube.com/watch?v=4uVNz9sQn18
#### https://www.youtube.com/watch?v=WDha52dbLWM

## Issues I ran into
- Vue would not compile on npm run dev
- Error message "Vue.component is not a function" in console

## How I fixed it
#### - Vue would not compile on npm run dev
** * Fresh install of node did not resolve this issue * **
- Deleted the node_modules folder, deleted the package-lock.json file, ran npm install again followed by npm run dev

#### - Error message "Vue.component is not a function" in console
- This one took many hours of debugging, with no suggestions online resolving the issue
- I tried switching window.Vue = Vue to import Vue from 'vue', did not resolve issue
- Uninstalled Vetur for good measure, did not resolve the issue
- I was curious of whether my version of Vue is outdated and is affecting the way it is interacting with Laravel and Node, so I ran npm i -g vue-cli to get the latest version of Vue, and ran npm run dev again and Voila! The issue was resolved.






