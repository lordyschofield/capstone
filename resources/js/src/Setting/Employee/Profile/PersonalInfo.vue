<template>
    <div class="card rounded-md shadow bg-white mb-5" id="settingsInfo">
        <div class="card-body">
            <h2 class="mb-4 text-xl font-medium card-title">Profile Details</h2>

            <div class="form-control grid md:grid-cols-3 gap-4 my-4">
                <label class="label">
                    <span class="label-text req">Full Name</span>
                </label>
                <div class="col-span-2 grid md:grid-cols-3 gap-4">
                    <input type="text" placeholder="First name" class="input input-bordered"
                           v-model="form.first_name">
                    <input type="text" placeholder="Middle name" class="input input-bordered"
                           v-model="form.middle_name">
                    <input type="text" placeholder="Last name" class="input input-bordered"
                           v-model="form.last_name">
                </div>
            </div>

            <div class="form-control grid md:grid-cols-3 gap-4 my-4">
                <label class="label">
                    <span class="label-text">Nickname</span>
                </label>
                <input type="text" class="input input-bordered col-span-2" v-model="form.nickname">
            </div>

            <div class="form-control grid md:grid-cols-3 gap-4 my-4">
                <label class="label">
                    <span class="label-text">Birthday</span>
                </label>
                <input type="date" class="input input-bordered col-span-2"
                       placeholder="birthday"
                       v-model="form.birthday">
            </div>

             <div class="form-control grid md:grid-cols-3 gap-4 my-4">
                <label class="label">
                    <span class="label-text">Designation</span>
                </label>
                <input type="text" class="input input-bordered col-span-2"
                       placeholder="designation"
                       v-model="form.designation">
            </div>

            <div class="form-control grid md:grid-cols-3 gap-4 my-4">
                <label class="label">
                    <span class="label-text">Mobile No.</span>
                </label>
                <input type="tel" class="input input-bordered col-span-2"
                       placeholder="mobile_phone"
                       v-model="form.mobile_phone">
            </div>


            <div class="form-control grid md:grid-cols-3 gap-4 my-4">
                <label class="label">
                    <span class="label-text">Email</span>
                </label>
                <input type="text" placeholder="email" class="input input-bordered col-span-2" v-model="form.email">
            </div>



            <div class="form-control grid md:grid-cols-3 gap-4 my-4">
                <label class="label">
                    <span class="label-text req">Address</span>
                </label>
                <input type="text" class="input input-bordered col-span-2"
                       placeholder="House or Lot No., Street, Barangay, Municipality, Province Zipcode"
                       v-model="form.address">
            </div>

        
            <div class="justify-end space-x-2 card-actions">
                <button type="button" class="btn btn-ghost"  @click="revertChanges">Cancel</button>
                <button type="button" class="btn btn-primary"  @click="saveChanges">Save Changes</button>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    name: "PersonalInfo",
    props: {
        info: {
            type: Object,
            required: true
        }
    },
    data() {
        return {
            form: {...this.info}
        }
    },
    methods: {
        revertChanges() {
            window.location.href = "/home"
        },
        saveChanges() {
            let formData = new FormData;
            formData.append('first_name', this.form.first_name)
            formData.append('middle_name', this.form.middle_name)
            formData.append('last_name', this.form.last_name)
            formData.append('nickname', this.form.nickname)
            formData.append('email', this.form.email)
            formData.append('birthday', this.form.birthday)
            formData.append('address', this.form.address)
            formData.append('mobile_phone', this.form.mobile_phone)
            formData.append('designation', this.form.designation)
            formData.append('_method', 'PUT')

            // block ui

            axios.post(`/settings/profile`, formData)
                .then(({data}) => {
                    // unblock ui
                    // alert success using response message
                    console.log(data)
                })
                .catch(({response: {data: {errors}}}) => {
                    // alert error
                    // handle errors
                })
        }
    },
    mounted() {
    }
}
</script>
