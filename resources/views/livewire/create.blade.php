<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Add Post</div>
            <div class="card-body">
                <form>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title:</label>
                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Title"
                            wire:model="title">
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Body:</label>
                        <textarea type="email" class="form-control" id="exampleFormControlInput2" wire:model="body"
                            placeholder="Enter Body"></textarea>
                        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group mt-1">
                        <button wire:click.prevent="store()" class="btn btn-success">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>