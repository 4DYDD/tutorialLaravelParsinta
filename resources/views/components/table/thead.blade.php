@if ($page == 'users')
    <thead class="bg-gray-300">
        <tr>
            <th scope="col" class="py-3.5 pl-4 pr-3 text-center text-sm font-semibold text-gray-900">
                #
            </th>
            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                Name
            </th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                Title</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                Email</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                Created At</th>
            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                <span class="sr-only">Edit</span>
            </th>
        </tr>
    </thead>
@elseif ($page == 'articles')
    <thead class="bg-gray-300">
        <tr>
            <th scope="col" class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">
                Title
            </th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                Teaser</th>
            <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                Body</th>
            <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                <span class="sr-only">Edit</span>
            </th>
        </tr>
    </thead>
@endif
