<form wire:submit.prevent="submit">
    <div class="modal-header">
        <h4 class="modal-title">Add Employee</h4>
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
    </div>
    <div class="modal-body">
        <div class="form-group">
            <label>Name</label>
            <input type="text" wire:model="name" class="form-control">
            @error('name')
                <span class="error">The field is required !</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Email</label>
            <input type="email" wire:model="email" class="form-control">
            @error('email')
                <span class="error">The field is required !</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Address</label>
            <textarea class="form-control" wire:model="address"></textarea>
            @error('address')
                <span class="error">The field is required !</span>
            @enderror
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" class="form-control" wire:model="phone_no">
            @error('name')
                <span class="error">The field is required !</span>
            @enderror
        </div>
    </div>
    <div class="modal-footer">
        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
        <button type="submit" class="btn btn-success" wire:click="validate">Add</button>
    </div>
</form>
