<div class="fixed inset-0 flex items-end justify-center px-4 py-6 pointer-events-none sm:p-6 sm:items-start sm:justify-end">

    <livewire:flash-messages />

    <script>
    window.addEventListener('DOMContentLoaded', (event) => {
        // used on livewire
        Livewire.on('flashMessageAdded', data => {
            setTimeout(() => {
                closeFlash(data.uid);
            }, 5000);
        });
    });
    function closeFlash(uid) {
            var element = document.getElementById(uid);
            if (typeof(element) != 'undefined' && element != null)
            {
                element.style.opacity = '0';
                setTimeout(() => {
                    element.outerHTML = '';
                }, 500);
            }
        }
    </script>
</div>
