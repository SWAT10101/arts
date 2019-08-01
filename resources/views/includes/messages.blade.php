@section('sweet_dialog')

@if(session('success'))

<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 5000
    });

    Toast.fire({
        type: 'success',
        title: '{{ session(' success ') }}',
    });

</script>
@endif

@if(session('delete'))

<script>
    const Toast = Swal.mixin({
        toast: true,
        position: 'bottom-end',
        showConfirmButton: false,
        timer: 5000
    });

    Toast.fire({
        type: 'success',
        title: '{{ session(' delete ') }}',
    });

</script>
@endif




@if(session('confirm'))
<!-- delete form -->
<form id="deleteform" method="GET" action="{{ route('menu.delete', ['id' => session('confirm')]) }}">@csrf</from>

    <script>
       swal({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            type: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.value) {
                document.getElementById("deleteform").submit();
            }
        });

    </script>
    @endif

    @endsection
