<div class="panel">
    <div class="sub-panel form-sub-panel">
        <h1 class="panel-header">Intern Works</h1>
        <div class="work-list-panel">
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a id="it" class="work-nav-link nav-link active" href="#">IT Dept</a>
                </li>
                <li class="nav-item">
                    <a id="animation" class="work-nav-link nav-link" href="#">Animation Dept</a>
                </li>
                <li class="nav-item">
                    <a id="writing" class="work-nav-link nav-link" href="#">Writing Dept</a>
                </li>
                <li class="nav-item">
                    <a id="transmedia" class="work-nav-link nav-link" href="#">Transmedia-TV Dept</a>
                </li>
                <li class="nav-item">
                    <a id="marketing" class="work-nav-link nav-link" href="#">Marketing Dept</a>
                </li>
                <li class="nav-item">
                    <a id="hr" class="work-nav-link nav-link" href="#">HR, Admin, Finance</a>
                </li>
            </ul>
            <div id="work-list">
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function() {
        $.ajax({
            type: 'GET',
            url: '/admin/work/it',
            success: function(data) {
                $('#work-list').html(data);
            },
        });
        
        $('.work-nav-link').click(function() {
            $('.work-nav-link').removeClass('active');
            $(this).addClass('active');

            $.ajax({
                type: 'GET',
                url: '/admin/work/' + $(this).attr('id'),
                success: function(data) {
                    if (data != '') {
                        $('#work-list').html(data);
                    } else {
                        $('#work-list').html('<div class="empty-list d-flex flex-column align-items-center"><img src="/assets/empty.svg" class="empty-box" alt=""><p>Oops, this list is currently empty.</p></div>');
                    }
                },
            });
        });
    })
</script>