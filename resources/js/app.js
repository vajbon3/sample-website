import './bootstrap';
import Alpine from "alpinejs";
import collapse from '@alpinejs/collapse';
import "flowbite";

window.Alpine = Alpine;

// register alpine plugins
Alpine.plugin(collapse);

// start alpine application
Alpine.start();

// adjust hash link scroll
window.addEventListener("hashchange", function (e) {
    const hashtag = e.newURL.match(/\#[a-zA-Z_\-]+/)[0]
    if(hashtag !== '#contact' && e.newURL !== e.oldURL)
        window.scrollTo(window.scrollX, window.scrollY - 200);
});

