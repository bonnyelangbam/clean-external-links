document.addEventListener('DOMContentLoaded', function () {
    if (!window.CEL_WHITELIST) return;
    var whitelist = CEL_WHITELIST.map(function (domain) { return domain.trim().toLowerCase(); }).filter(Boolean);
    var links = document.querySelectorAll('a[href]');

    links.forEach(function (link) {
        try {
            var url = new URL(link.href);
            var isExternal = url.hostname !== window.location.hostname;
            var isWhitelisted = whitelist.some(function (domain) {
                // Match on exact domain or subdomain
                return url.hostname === domain || url.hostname.endsWith('.' + domain);
            });

            if (isExternal && !isWhitelisted) {
                link.setAttribute('target', '_blank');
                link.setAttribute('rel', 'nofollow noreferrer noopener');
            }
        } catch (e) { }
    });
});
