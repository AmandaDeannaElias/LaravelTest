<template>
  <div class="container">
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
        <h1>Lorem Ipsum</h1>
        <p>
          Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem
          provident explicabo accusamus laudantium voluptatum nobis sed nesciunt
          neque possimus molestiae?
        </p>
        <button class="button" @click="showModal = false">Close Modal</button>
      </div>
    </transition>
    <div class="row">
      <div class="col-lg-3">
        <h1 class="my-4">My Laravel Test</h1>
        <div class="list-group">
          <p class="list-group-item" v-for="test in tests" :key="test.id">
            Name: {{ test.name }} Description: {{ test.description }}
          </p>
        </div>
      </div>
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