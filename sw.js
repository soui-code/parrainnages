self.addEventListener("install", event => {
    console.log("Service worker installé");
});

self.addEventListener("activate", event => {
    console.log("Service worker activé");
});
