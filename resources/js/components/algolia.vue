<template>
  <div>
    <ais-instant-search :search-client="searchClient" index-name="beds">
      <ais-search-box placeholder="Search beds..."></ais-search-box>

      <ais-hits>
        <template slot="item" slot-scope="{ item }">
          <div>
            <h4>{{ item.name }}</h4>
            <h4>{{ item.price }}</h4>
            <p>quantiy is {{ item.quantity }}</p>
          </div>
        </template>
      </ais-hits>
    </ais-instant-search>
  </div>
</template>

<script>
import { AisInstantSearch, AisSearchBox } from "vue-instantsearch";

export default {
  components: {
    AisInstantSearch,
    AisSearchBox,
  },
  data: function () {
    return {
      searchClient: algoliasearch(
        "VVZG59Q6AZ",
        "4ee8eed4e2677d83fb2683ec2f19b6ab"
      ),
    };
  },
};
</script>

<style>
</style>
