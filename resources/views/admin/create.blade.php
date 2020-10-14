<div class="panel">
    <div class="sub-panel form-sub-panel">
        <h1 class="panel-header">User Creation</h1>
        @if(session()->has('message'))
            <div class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        @endif
        <form action="{{route('admin.create')}}" method="POST" enctype="multipart/form-data">
            @csrf
        
            <div class="form-section">
                <div class="row">
                    <div class="col-sm-2">
                        <h1 class="panel-header">User Type</h1>
                    </div>
                    <div class="col-sm-10">
                        <select name="type" id="type" class="select-dropdown">
                            <option value="0">Select user type</option>
                            <option value="3">Administrator</option>
                            <option value="2">Employee</option>
                            <option value="1">Intern</option>
                        </select>
                        <label class="input-label" for="type">The user type will determine what kind of user will be created.</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <h1 class="panel-header">Name</h1>
                    </div>
                    <div class="col-sm-10">
                        <input class="input-text" type="text" name="name" id="name-text" value="" autocomplete="off"/>
                        <label class="input-label" for="name">Enter the name of the user in the textbox above</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <h1 class="panel-header">Email Address</h1>
                    </div>
                    <div class="col-sm-10">
                        <input class="input-text" type="text" name="email" id="email-text" value="" autocomplete="off"/>
                        <label class="input-label" for="email">Enter the email address for the user</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-2">
                        <h1 class="panel-header">Department</h1>
                    </div>
                    <div class="col-sm-10">
                        <select name="department" class="select-dropdown">
                            <option value="0">select user department</option>
                            <option value="IT department">IT Department</option>
                            <option value="Animation department">Animation Department</option>
                            <option value="Writing department">Writing Department</option>
                            <option value="Transmedia-TV department">Transmedia-TV Department</option>
                            <option value="Marketing department">Marketing Department</option>
                            <option value="HR, Admin, Finance">HR, Admin, Finance</option>
                        </select>
                        <label class="input-label" for="department">Selected department is the department where the user will be assigned</label>
                    </div>
                </div>
                <div class="row employee">
                    <div class="col-sm-2">
                        <h1 class="panel-header">Position</h1>
                    </div>
                    <div class="col-sm-10">
                        <input class="input-text" type="text" name="position" id="email-text" value="" autocomplete="off"/>
                        <label class="input-label" for="position">Select the position of the employee/admin</label>
                    </div>
                </div>
                <div class="row intern">
                    <div class="col-sm-2">
                        <h1 class="panel-header">Course</h1>
                    </div>
                    <div class="col-sm-10">
                        <input class="input-text" type="text" name="course" id="email-text" value="" autocomplete="off"/>
                        <label class="input-label" for="course">Enter the course of the incoming intern</label>
                    </div>
                </div>
                <div class="row intern">
                    <div class="col-sm-2">
                        <h1 class="panel-header">School</h1>
                    </div>
                    <div class="col-sm-10">
                        <input class="input-text" type="text" name="school" id="email-text" value="" autocomplete="off"/>
                        <label class="input-label" for="school">Enter the name of the school of the incoming intern</label>
                    </div>
                </div>
                <div class="row intern">
                    <div class="col-sm-2">
                        <h1 class="panel-header">Year Level</h1>
                    </div>
                    <div class="col-sm-10">
                        <input class="input-text" type="text" name="year" id="email-text" value="" autocomplete="off"/>
                        <label class="input-label" for="position">Enter the year level of the incoming intern</label>
                    </div>
                </div>
                <div class="row intern">
                    <div class="col-sm-2">
                        <h1 class="panel-header">Date Started</h1>
                    </div>
                    <div class="col-sm-10">
                        <input class="input-text" type="text" name="startdate" id="email-text" value="" autocomplete="off"/>
                        <label class="input-label" for="position">Enter the date started on a YYYY-MM-DD format</label>
                    </div>
                </div>
                <div class="row intern">
                    <div class="col-sm-2">
                        <h1 class="panel-header">End Date</h1>
                    </div>
                    <div class="col-sm-10">
                        <input class="input-text" type="text" name="enddate" id="email-text" value="" autocomplete="off"/>
                        <label class="input-label" for="position">Enter the end date on a YYYY-MM-DD format</label>
                    </div>
                </div>
            </div>

            <button type="submit" class="button button-main form-button">
                Create User 
            </button>
        </form>
    </div>
</div>
<script>

    // Select Box listen
    $("#type").on('change', function(e) {
        if ($(this).children("option:selected").val() == '3' || $(this).children("option:selected").val() == '2') {
            $('.employee').css('display', 'flex');
            $('.intern').css('display', 'none');
        } else {
            $('.intern').css('display', 'flex');
            $('.employee').css('display', 'none');
        }
    });
</script>