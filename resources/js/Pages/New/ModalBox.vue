<template>
    <div class="text-center bg-gray-100">
      <v-dialog
        v-model="dialog"
        width="auto"
      >
        <template v-slot:activator="{ props }">
          <v-btn
            color="primary"
            v-bind="props"
          >
            Open Dialog
          </v-btn>
        </template>
  
        <v-card style="max-width: 400px;">
          <v-card-text>
            <p class="text-center text-2xl mb-4 font-bold">Delete this file?</p>
            <p class="text-center">
                Are you sure you want to permanently remove this file from your document wallet
            </p>
            <div class="flex justify-center">
                <button class="bg-white mr-2 border border-blue-500 hover:bg-blue-700 text-blue-500 font-bold rounded-full py-2 px-10 mt-8">
                Cancel
            </button>

            <button class="bg-blue-500 ml-2 hover:bg-blue-700 text-white font-bold rounded-full py-2 px-10 mt-8">
                Delete
            </button>
            </div>
            
          </v-card-text>
        </v-card>
      </v-dialog>
    </div>
  </template>
  <script>
  export default {
    data () {
      return {
        dialog: false,
      }
    },
  }
</script>