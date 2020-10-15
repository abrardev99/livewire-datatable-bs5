<div>
    <div class="row gy-3">

        <div class="col-md-3">
            <input type="text" class="form-control form-control-sm" placeholder="Search..." aria-label="First name">
        </div>
        <div class="d-flux align-self-end col-md-3">
            <a href="#" class="text-muted">Advance Search</a>
        </div>

        <div class="col-md-6">
            <div class="input-group">
                <select wire:model="perPage" class="form-select form-select-sm" aria-label=".form-select-sm example">
                    <option selected disabled>Per Page</option>
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
                <button type="button" class="btn btn-sm btn-primary"><svg width="1em" height="1em"
                                                                          viewBox="0 0 16 16" class="bi bi-plus-circle" fill="currentColor"
                                                                          xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd"
                              d="M8 15A7 7 0 1 0 8 1a7 7 0 0 0 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z" />
                        <path fill-rule="evenodd"
                              d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z" />
                    </svg> New</button>
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
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                    <tr>
                        <th><div><input class="form-check-input" type="checkbox"></div></th>
                        <td>{{ $post->title }}</td>
                        <td>{{ $post->status }}</td>
                        <td>{{ $post->date_formatted }}</td>
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
