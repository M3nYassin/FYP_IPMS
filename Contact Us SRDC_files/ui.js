$(document).ready(function() {
    // Toggle navigation bar menu when clicking burger icon
    $(".navbar-burger").click(function() {
        $(".navbar-burger").toggleClass("is-active");
        $(".navbar-menu").toggleClass("is-active");
    });
    
    // Toggle 'is-active' class on target element
    $("[data-toggle]").click(function(event) {
        const el = $(event.currentTarget.dataset.toggle);
        if (el) {
            $(el).toggleClass("is-active");
            
            // Trigger custom event on target element
            const e = new CustomEvent("data-toggle", { detail: { relatedTarget: event.currentTarget } });
            el.get(0).dispatchEvent(e);
        }
    });
    
    // Add scrolling wrapper for content tables
    $(".content table").wrap("<div class='table-scroll'></div>");
    
    /* Page - home
    ** ==================== */
    $("#pages-home .carousel").slick({
        autoplay: true,
        autoplaySpeed: 5000,
        dots: true,
        fade: true,
        speed: 600
    });
    
    /* Page - image-gallery-item
    ** ==================== */
    $("#pages-image-gallery-item #imageGalleryModal").on("data-toggle", function(event) {
        // Update modal URLs
        const url = event.detail.relatedTarget.dataset.url || '#';
        $("#pages-image-gallery-item #imageGalleryModal a").attr("href", url);
        $("#pages-image-gallery-item #imageGalleryModal img").attr("src", url);
        
        // Update modal caption
        let caption = ''
        const title = event.detail.relatedTarget.dataset.title;
        const description = event.detail.relatedTarget.dataset.description;
        if (title || description) {
            if (title) {
                caption += `<span class="has-text-weight-bold">${title}</span>`
                if (description) {
                    caption += ' - '
                    caption += description
                }
            } else {
                caption += description
            }
        }
        $("#pages-image-gallery-item #imageGalleryModal figcaption").html(caption);
    });
});