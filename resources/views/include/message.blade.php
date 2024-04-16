@if (session()->has('message_success'))
    <div class="alert alert-success" role="alert" id="successMessage">
        {{ session('message_success') }}
    </div>
    <script>
        setTimeout(function () {
            document.getElementById('successMessage').style.display = 'none';
        }, 2000);
    </script>
@endif
