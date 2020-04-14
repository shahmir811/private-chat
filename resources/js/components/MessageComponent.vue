<template>
  <div class="card card-default chat-box">
    <div class="card-header change-display">
      <span>
        <strong :class="{'text-danger': session_block}">
          Username
          <span v-if="session_block">{{ }}(Blocked)</span>
        </strong>
      </span>
      <span>
        <a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fa fa-ellipsis-v" aria-hidden="true"></i>
        </a>

        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
          <a class="dropdown-item" href="#" @click.prevent="unblock" v-if="session_block">Unblock</a>
          <a class="dropdown-item" href="#" @click.prevent="block" v-else>Block</a>
          <a class="dropdown-item" href="#" @click.prevent="clear">Clear Chat</a>
        </div>

        <a href="#" @click.prevent="close" class="ml-3">
          <i class="fa fa-times" aria-hidden="true"></i>
        </a>
      </span>
    </div>

    <div
      class="card-body"
      v-chat-scroll="{
                smooth: true,
                notSmoothOnInit: true
            }"
    >
      <p class="card-text" v-for="chat in chats" :key="chat.id">{{ chat.content }}</p>
    </div>
    <form action class="card-footer" @submit.prevent="send">
      <div class="form-group">
        <input
          type="text"
          class="form-control"
          placeholder="Type your message here"
          :disabled="session_block"
        />
      </div>
    </form>
  </div>
</template>

<script>
export default {
  name: "MessageComponent",
  created() {
    this.chats.push(
      { id: 1, content: "Hello my friend!" },
      { id: 2, content: "Yah whatsup!" },
      { id: 3, content: "Hello my friend!" },
      { id: 4, content: "Yah whatsup!" },
      { id: 5, content: "Hello my friend!" },
      { id: 6, content: "Yah whatsup!" },
      { id: 7, content: "Hello my friend!" },
      { id: 8, content: "Yah whatsup!" },
      { id: 9, content: "Hello my friend!" },
      { id: 10, content: "Yah whatsup!" },
      { id: 11, content: "Hello my friend!" },
      { id: 12, content: "Yah whatsup!" }
    );
  },
  data() {
    return {
      chats: [],
      open: true,
      session_block: false
    };
  },
  methods: {
    send() {},
    close() {
      this.$emit("close");
    },
    clear() {
      this.chats = [];
    },
    block() {
      this.session_block = true;
    },
    unblock() {
      this.session_block = false;
    }
  }
};
</script>

<style lang="css">
.chat-box {
  height: 400px;
}

.card-body {
  overflow-y: scroll;
}

.change-display {
  display: flex;
  justify-content: space-between;
}
</style>
