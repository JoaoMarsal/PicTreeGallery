self.addEventListener("install", (event)=>{
    event.waitUntil(
        caches.open('pictree-cache').then((cache)=>{
            return caches.addAll([
                '/',
                '/index.php',
                '/V/style/index.css',
                '/V/js/index.js'
            ])
        })
    )
})

self.addEventListener("fetch", (event)=>{
    event.respondWith(
        caches.match(event.request).then((response)=>{
            return response || fetch(event.request);
        })
    )
})