<div>
    <button data-toggle="modal" data-target="#staticBackdrop" type="button" class="btn btn-sm btn-primary">
        <svg width="1em" height="1em"
             viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor"
             xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
            <path fill-rule="evenodd"
                  d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
        </svg>
        New
    </button>

    <!-- Modal -->
    <div wire:ignore.self class="modal fade" id="staticBackdrop" data-backdrop="static" data-show="true" data-keyboard="true" tabindex="-1"
         aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Create Post</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <form wire:submit.prevent="save">
                    <div class="modal-body">
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input wire:model="post.title" type="text" class="form-control" id="title" aria-describedby="title">
                            @error('post.title')
                            <div id="status" class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="status" class="form-label">Status</label>
                            <select wire:model="post.status" type="text" class="form-control" id="status" aria-describedby="status">
                                <option value="draft">Draft</option>
                                <option value="publish">Publish</option>
                            </select>
                            @error('post.status')
                            <div id="status" class="form-text text-danger">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
        <script>
            window.livewire.on('closeModal', () => {
                var myModalEl = document.getElementById('staticBackdrop')
                var modal = bootstrap.Modal.getInstance(myModalEl)
                modal.hide();
            });
        </script>
    @endpush

</div>
