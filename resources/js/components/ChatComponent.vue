<template>
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-md-3">
        <div class="card">
          <div class="card-header">Private Chat Application</div>

          <ul class="list-group">
            <li class="list-group-item">First</li>
            <li class="list-group-item">Second</li>
            <li class="list-group-item">Third</li>
            <li class="list-group-item">Four</li>
            <li class="list-group-item">Fifth</li>
          </ul>
        </div>
      </div>

      <div class="col-md-9">
        <message-component v-if="open" @close="close"></message-component>
      </div>
    </div>
  </div>
</template>

<script>
import MessageComponent from "./MessageComponent";

export default {
  name: "ChatComponent",
  created() {},
  components: {
    MessageComponent
  },
  data() {
    return {
      open: true
    };
  },
  methods: {
    close() {
      this.open = false;
    }
  }
};
</script>
