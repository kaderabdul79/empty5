import { ref } from "vue";
import axios from "axios";
import { useRouter } from "vue-router";

axios.defaults.baseURL = "http://rest-api.test/api/v1/";

export default function useSkills() {
  const skills = ref([]);
  const skill = ref([]);
  const errors = ref({});
  const router = useRouter();

  const getSkills = async () => {
    const response = await axios.get("skills");
    skills.value = response.data.data;
  };

  const getSkill = async (id) => {
    const response = await axios.get("skills/" + id);
    skill.value = response.data.data;
  };
  return {
    skill,
    skills,
    getSkill,
    getSkills,
    errors,
  };
}
