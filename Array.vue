<template>
  <div class="widget">
    <div v-if="activeItems && activeItems.length > 0">
      <ul>
        <li v-for="item in activeItems" :key="item.id">
          {{item.name}}
        </li>
      </ul>
    </div>
  </div>
</template>
<script>
  export default {
    data() {
      return {
        loading: true,
        list: {
          'John': true,
          'Jane': true,
          'Bob': false
        },
      }
    },
    computed: {
      activeItems() {
        /*
          return `this.list` as an Array of object and filter by if active is true
          Expected output
          [
            {name: 'John', active: true},
            {name: 'Jane', active: true}
          ]
        */
        var result = [];
        for(const [key, value] of Object.entries(this.list))
        {
            if(value == true)
            {
              result.push({'name' : key, 'active' : value});
            }
        }
        return result;
      }
    }
  }
</script>
