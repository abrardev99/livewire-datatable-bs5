<div>
    <div class="row gy-3">

        <div class="col-md-3">
            <input wire:model="searchTerm" type="text" class="form-control form-control-sm" placeholder="Search Title or Status" aria-label="First name">
        </div>
        <div class="d-flux align-self-end col-md-3">

        </div>

        <div class="col-md-6">
            <div class="input-group">
                <label for="perPage" class="mr-1">Per Page</label>
                <select wire:model="perPage"  id="perPage" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="100">100</option>
                </select>
                <select class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected disabled>Bulk Actions</option>
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="100">100</option>
                </select>
                <livewire:post.create />
            </div>


        </div>

        <div class="col-12">
            <div class="table-responsive">
                <table class="table table-bordered">
                    <thead class="text-muted">
                    <tr>
                        <th scope="col" width="1%"><div><input class="form-check-input" type="checkbox"></div></th>
                        <th scope="col">Title</th>
                        <th scope="col">Status</th>
                        <th scope="col">Date</th>
                        <th scope="col"></th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <th><div><input class="form-check-input" type="checkbox"></div></th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->status }}</td>
                        <td>{{ $post->date_formatted }}</td>
                        <td>
                            <button wire:click="destroy({{ $post->id }})" class=" btn btn-link text-danger">Delete</button>
                            <livewire:post.create :post="$post"/>
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-6">
            <p>Showing {{ $posts->firstItem() }} to {{ $posts->lastItem() }} of {{ $posts->total() }}</p>
        </div>
        <div class="col-6">
            {{ $posts->links() }}
        </div>

    </div>

</div>
