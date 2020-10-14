<div class="panel">
    <div class="sub-panel form-sub-panel">
        <h1 class="panel-header">Reset Password</h1>
        <form action="#" method="POST" enctype="multipart/form-data">
            @csrf
        
            <div class="form-section">
                <div class="row">
                    <div class="col-sm-2">
                        <h1 class="panel-header">Select User</h1>
                    </div>
                    <div class="col-sm-10">
                        <select id="reset-select" class="select-dropdown">
                            <option value="0">User List</option>
                            @foreach ($users as $user)
                                <option value="{{$user->id}}">{{$user->name}}</option>
                            @endforeach
                        </select>
                        <label class="input-label" for="name">Select user from list. A password reset link will automatically be sent to user's email</label>
                    </div>
                </div>
            </div>
            <a href="#" class="button form-button button-main" id="reset-button">
                Reset Password
            </a>
        </form>
    </div>
</div>
<script>
    $("#reset-button").click(function() {
        $.ajax({
            type: 'POST',
            url: '/admin/reset',
            data: {
                id: $('#reset-select').children("option:selected").val()
            },
            success: function(data) {
                $('.modal').modal('toggle');
                $('.modal-title').html('Password Successfully Changed');
                $('.modal-p').html(data);
            }
        });
    });
</script>