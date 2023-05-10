<template>

    <section style="height: 100%;">
        <nav class="navbar" role="navigation" aria-label="main navigation">

        </nav>
        <div class="columns  has-text-dark">
            <div class="column has-background is-relative is-two-fifths bg-img" style="background-image: url('https://images.unsplash.com/photo-1683497727598-2b9334818703?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxlZGl0b3JpYWwtZmVlZHw4OHx8fGVufDB8fHx8&auto=format&fit=crop&w=600&q=60');background-repeat: no-repeat;background-size: cover;">
                <div class="specification p-4" style="background-color: #171C2E;color: #FFFFFF; bottom: 100px;left: 50px;right: 50px; position: absolute;">
                    <p class="is-size-4 has-text-weight-bold">Specification Engine</p>
                    <p class="is-size-7 mt-2">Take a guided walk through of your space and start defining your specification. This will give you an idea of total cost</p>
                </div>
            </div>
            <div class="column card-div" style="height: 100vh;">
                <div class="card">
                    <header class="card-header">
                        <p class="card-header-title">
                            <i class="fas fa-arrow-left pr-4"></i>
                            Create an account
                        </p>
                    </header>
                    <div class="card-content">
                        <div class="content px-5">
                            <div class="field">
                                <label class="label">First Name</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input class="input" type="text" placeholder="first name..." value="">
                                    <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                              </span>
                                </div>
                            </div>

                            <div class="field">
                                <label class="label">Last Name</label>
                                <div class="control has-icons-left has-icons-right">
                                    <input class="input" type="text" placeholder="last name..." value="">
                                    <span class="icon is-small is-left">
                                <i class="fas fa-user"></i>
                              </span>
                                </div>
                            </div>

                            <div class="" style="margin-top: 80px;">
                                <div class="is-flex is-justify-content-center">
                                    <button @click="test" class="button is-link is-rounded" style="background-color: #3399FD; width: 250px;">Next</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

</template>

<script setup>

function test(){
    alert()
}
</script>

<style scoped>

</style>
