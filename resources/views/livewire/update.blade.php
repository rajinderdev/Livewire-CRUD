<div class="row justify-content-center">
    <div class="col-md-8">
        <div class="card">
            <div class="card-header">Update Post</div>
            <div class="card-body">
                <form>
                    <input type="hidden" wire:model="post_id">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Title:</label>
                        <input type="text" class="form-control" name="exampleFormControlInput1" placeholder="Enter Title"
                            wire:model="title" value="{{$title}}">
                        @error('title') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput2">Body:</label>
                        <textarea type="email" class="form-control" name="body" id="exampleFormControlInput2" wire:model="body"
                            placeholder="Enter Body"></textarea>
                        @error('body') <span class="text-danger">{{ $message }}</span>@enderror
                    </div>
                    <div class="form-group mt-1">
                        <button wire:click.prevent="update()" class="btn btn-dark">Update</button>
                        <button wire:click.prevent="cancel()" class="btn btn-danger">Cancel</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>