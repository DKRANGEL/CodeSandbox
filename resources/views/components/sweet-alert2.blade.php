@if(session('messages'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const messages = {!! json_encode(session('messages')) !!};
            if (messages) {
                if (messages.success) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: messages.success,
                        showConfirmButton: false,
                        timer: 2800
                    });
                } else if (messages.syncTenants) {
                    Swal.fire({
                        position: 'center',
                        icon: 'success',
                        title: "Sucesso!",
                        text: messages.syncTenants,
                        showConfirmButton: true,
                    });
                } else if (messages.warning) {
                    Swal.fire({
                        position: 'center',
                        icon: 'warning',
                        title: messages.warning,
                        showConfirmButton: false,
                        timer: 3000
                    });
                } else if (messages.error) {
                    Swal.fire({
                        position: 'center',
                        icon: 'error',
                        title: messages.error,
                        showConfirmButton: false,
                        timer: 3000
                    });
                }
            }
        });
    </script>
@endif
{{-- Clearing the browser cache: This ensures that the browser does not store a cached version of the page and always loads the latest version. --}}
@if(session('timestamp'))
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const timestamp = {{ session('timestamp') }};
            const url = window.location.href.split('?')[0] + '?timestamp=' + timestamp;
            window.history.replaceState(null, null, url);
        });
    </script>
@endif