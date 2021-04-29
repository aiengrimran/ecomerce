@extends('layouts.appShop')
@section('navBar')
<div id="app">
    <!-- In a default Laravel app, Vue will render inside an #app div -->
    <ais-instant-search
      :search-client="searchClient"
      index-name="{{ (new App\Models\Bed)->searchableAs() }}"
    >
      <ais-search-box placeholder="Search bed ..."></ais-search-box>
  
      <ais-hits>
        <template slot="item" slot-scope="{ item }">
          <div>
            <h1>@{{ item.title }}</h1>
            <h4>@{{ item.summary }}</h4>
          </div>
        </template>
      </ais-hits>
    </ais-instant-search>
  </div>
  
  <script>
  new Vue({
    data: function() {
      return {
        searchClient: algoliasearch(
          '{{ config('scout.algolia.id') }}',
          '{{ Algolia\AlgoliaSearch\Algolia::searchKey(App\Models\Bed::class) }}',
        ),
      };
    },
    el: '#app',
  });
  </script>
  
@endsection