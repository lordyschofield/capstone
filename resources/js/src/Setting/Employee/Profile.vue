<script>
import PersonalInfo from "./Profile/PersonalInfo";

export default {
    components: {
        PersonalInfo
    },
    data() {
        return {
            activeTab: 'info'
        }
    },
    methods: {
        activateTab(tab, event) {
            let activeTab = document.getElementsByClassName('tab-active')[0]
            activeTab.classList.remove('tab-active')

            let currentTab = event.target
            currentTab.classList.add('tab-active')

            this.activeTab = tab
        }
    }
}
</script>
