<template>
    <div> 
        <div class="bg-gray-100 content">
            <div style="height: 400px;" class="flex justify-center flex-col items-center">
                <v-icon class="text-gray-400 clipboard-icon mt-10" icon="mdi-file-plus"></v-icon>
                <p class="pt-4 text-lg font-bold text-gray-700">Your Document Wallet is Empty</p>
                <p class="w-1/2 text-center text-xs">Click the button below to start uploading your files</p>
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold rounded-full py-2 px-10 mt-8">
                    <v-icon icon="mdi-plus"></v-icon>
                    Upload
                </button>
            </div>
        </div>
    </div>
</template>

<script>
    
</script>

<style scoped>
    .clipboard-icon{
        font-size: 15rem;
        align-items: center;
        color: #57B3BD;
    }
    .content{
        position: relative;
    }
</style>