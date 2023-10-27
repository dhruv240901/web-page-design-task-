<div class="modal fade" id="addUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Add User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="adduserform" method="POST">
                    <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                    <div class="mb-3">
                        <label for="exampleInputfirstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstname" aria-describedby="emailHelp" name="firstname">
                        <label id="exampleInputfirstname-error" class="error" for="exampleInputfirstname"></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputlastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastname" aria-describedby="emailHelp" name="lastname">
                        <label id="exampleInputlastname-error" class="error" for="exampleInputlastname"></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="Email" aria-describedby="emailHelp" name="email">
                        <label id="exampleInputEmail-error" class="error" for="exampleInputEmail"></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPhone" class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="Phone" aria-describedby="emailHelp" name="phone">
                        <label id="exampleInputPhone-error" class="error" for="exampleInputPhone"></label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="adduserbtn" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Edit User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="edituserform" method="POST">
                    @csrf
                    <input type="hidden" value="" id="user_id" name="user_id">
                    <div class="mb-3">
                        <label for="exampleInputfirstname" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="oldfirstname" aria-describedby="emailHelp" name="firstname">
                        <label id="exampleOldInputfirstnameError" class="error" for="exampleInputfirstname"></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputlastname" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="oldlastname" aria-describedby="emailHelp" name="lastname">
                        <label id="exampleOldInputlastnameError" class="error" for="exampleInputlastname"></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail" class="form-label">Email address</label>
                        <input type="email" class="form-control" id="oldEmail" aria-describedby="emailHelp" name="email">
                        <label id="exampleOldInputEmailError" class="error" for="exampleInputEmail"></label>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPhone" class="form-label">Phone number</label>
                        <input type="text" class="form-control" id="oldPhone" aria-describedby="emailHelp" name="phone">
                        <label id="exampleOldInputPhoneError" class="error" for="exampleInputPhone"></label>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" id="edituserbtn" class="btn btn-primary">Update</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="deleteUserModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Delete User</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="deleteuserform" method="POST">
                    @csrf
                    <input type="hidden" value="" id="userid" name="user_id">
                    <p>Are you sure you want to delete?</p>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                <button type="button" id="deleteuserbtn" class="btn btn-primary" data-bs-dismiss="modal">Yes</button>
            </div>
        </div>
    </div>
</div>
