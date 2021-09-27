<template>
  <div class="container">
   
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">My Laravel Test</h1>
        <table class="list-group">
          <tr>
          <th>Name:</th>
          <th>Description: </th>
          </tr>
          <tr  v-for="test in tests" :key="test.id">
          <td class="list-group-item">
             {{ test.name }}
          </td>
          <td>
             {{ test.description }}
          </td>
          </tr>
        </table>
      </div>
       <button class="button" @click="showModal = true">Show Modal</button>
    <transition name="fade" appear>
      <div
        class="modal-overlay"
        v-if="showModal"
        @click="showModal = false"
      ></div>
    </transition>
    <transition name="slide" appear>
      <div class="modal" v-if="showModal">
        <h1>Hi There!</h1>
        <p>
          I will be using this application to showcase my skills in Laravel and Vue.js!
        </p>
        <button class="button" @click="showModal = false" >Close Modal</button>
      </div>
    </transition>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      tests: [],
      showModal: true,
    };
  },
  mounted() {
    this.loadTests();
  },
  methods: {
    loadTests: function () {
      axios
        .get("./api/tests")
        .then((response) => {
          this.tests = response.data.data;
        })
        .catch(function (error) {
          console.log(error);
        });
    },
  },
};
</script>