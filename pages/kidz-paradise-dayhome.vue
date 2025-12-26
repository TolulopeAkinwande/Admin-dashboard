<template>
    <Navbar />
    <section class="relative h-[624px] flex flex-col justify-between   overflow-hidden" data-aos="fade-in"
        data-aos-duration="900" data-aos-offset="200">
       
        <div class="absolute inset-0">
            <div class="relative w-full h-full">
                <img v-for="(img, i) in selectedHome.images" :key="i" :src="img" alt="Dayhome image"
                    class="absolute inset-0 w-full h-full object-cover transition-opacity duration-700 ease-out"
                    :class="{ 'opacity-100': i === currentIndex, 'opacity-0': i !== currentIndex }" />
            </div>
        </div>
        <div class="w-full absolute  top-1/2 -translate-y-1/2 flex justify-between px-[24px] pointer-events-none">
            <button @click="prevImage"
                class="flex justify-center items-center w-[40px] h-[40px] rounded-[8px] bg-[#ffffff] cursor-pointer hover:bg-gray-50 transition shadow-md pointer-events-auto">
                <img src="/images/left.svg" alt="Previous" class="w-[13px] h-[21px] flex justify-center items-center">
            </button>
            <button @click="nextImage"
                class="flex justify-center items-center w-[40px] h-[40px] rounded-[8px] bg-[#ffffff] cursor-pointer hover:bg-gray-50 transition shadow-md rotate-180 pointer-events-auto">
                 <img src="/images/left.svg" alt="Next" class="w-[13px] h-[21px] flex justify-center items-center">
            </button>
        </div>
        <div @click="$router.push('/dayhomes')"
            class="relative flex justify-center items-center top-0 w-[48px] h-[48px] rounded-[8px] bg-white ml-[24px] lg:ml-[63px] mt-[38px] cursor-pointer hover:bg-gray-50 transition">
            <img src="/images/arrowleft.png" alt="Back to home" class="w-6 h-6">
        </div>
        <div class="w-full pl-[24px] lg:pl-[215px]">
            <h1 class="relative text-[36px] mb-[50px] lg:text-[48px] text-white z-10 cheltenham transition-all duration-900"
                data-aos="zoom-in" data-aos-duration="900">
                {{ selectedHome.name }}
            </h1>
        </div>
    </section>
    <main class="pb-[80px] pt-[26px]  lg:pt-[80px] px-[16px] lg:px-[244px] bg-[#F9FAFB]">
        <div class="w-full">
            <div class="bg-white rounded-[16px] lg:px-[32px] px-[16px] lg:py-[28px] py-[16px] animate-fade-in mb-[40px]"
                data-aos="fade-right" data-aos-duration="900">
                <div class="flex flex-col md:flex-row md:items-start justify-between gap-[16px] ">
                    <div class="flex flex-col gap-[16px]">
                        <div class="flex items-center gap-[8px]">

                            <img src="/images/loc.png" alt="">
                            <p class="text-[16px] lg:text-[18px] text-[#5A5757] leading-[24px]">{{ selectedHome.location
                                }}</p>
                        </div>
                        <div class="flex items-center gap-[8px]">
                            <img src="/images/clock.png" alt="">
                            <p class="text-[16px] lg:text-[18px] text-[#5A5757] leading-[24px]">{{ selectedHome.ages }}
                            </p>
                        </div>
                    </div>
                    <NuxtLink :to="{ path: '/enrollment', query: { home: selectedHome.name } }" class="inline-block">
                        <Button variant="enrollment">Request Enrollment</Button>
                    </NuxtLink>
                </div>
            </div>

            <section class="mb-[40px] animate-fade-in" :style="{ animationDelay: '0.1s' }">
                <h6 class="cheltenham text-[24px] lg:text-[24px] mb-[16px]">
                    Meet Our Educator
                </h6>

                <div class=" rounded-[16px] p-[18px] lg:p-[40px]  bg-white flex flex-col gap-[16px]"
                    data-aos="fade-left" data-aos-duration="900">

                    <div>
                        <p class="text-[#262626] text-[20px]"> <span class="cheltenham">Name: </span>
                            <span class="cheltenham"></span>{{ selectedHome.educator.name }}
                        </p>
                    </div>
                    <p class="text-[#262626] text-[20px]"> <span class="cheltenham">Certification:</span>
                            <span class="cheltenham"></span>{{ selectedHome.educator.certification }}
                        </p>
                    <div>
                        <h3 class="mb-[16px] cheltenham text-[#262626] text-[20px]">Training and Qualification:</h3>
                        <ul class="flex flex-col gap-[24px]">
                            <li v-for="(q, i) in selectedHome.educator.qualifications" :key="i"
                                class="flex items-center gap-3 transition-transform duration-300 hover:translate-x-1"
                                data-aos="fade-up" :data-aos-delay="i * 80">
                                <img src="/images/markk.svg"
                                    class="w-[16px] h-[16px] transition-transform duration-300 group-hover:rotate-12"
                                    alt="Check">
                                <p class="text-[18px] text-[#262626]">{{ q }}</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>

            <section data-aos="fade-up" data-aos-duration="900">
                <h6 class="cheltenham text-[24px] mb-[16px]">Description of Care:</h6>
                <div class="bg-white rounded-[16px] p-[16px] lg:p-[40px]">
                    <div class="flex flex-col gap-[16px] lg:gap-[40px] text-[18px] text-[#262626]">
                        <p v-for="(para, i) in selectedHome.description" :key="i" data-aos="fade-up"
                            :data-aos-delay="i * 120" class="transition-opacity duration-700">{{ para }}</p>
                    </div>
                </div>
            </section>
        </div>
    </main>
</template>


<script setup lang="ts">
import { ref } from 'vue'
import { useRoute } from 'vue-router'

const route = useRoute()

interface Dayhome {
    id: number
    name: string
    location: string
    ages: string
    images: string[]
    educator: {
        name: string
        certification: string
        qualifications: string[]
    }
    description: string[]
}
const homes = ref([
    {
        id: 1,
        name: "Kidz Paradize Dayhome",
        location: "Saddle Ridge Community NE, Calgary",
        ages: "Operating Hours: 6:30 am to 6:00 pm",
        images: ["/images/paradise1.jpg", "/images/paradise2.jpg", "/images/paradise3.jpg"],
        educator: {
            name: "Ms. Monika",
            certification: "Level 1 ECE Certification (currently on course to get Level 2 ECE Certification by 2026)",
            qualifications: [
                'Licensed Professional Nurse',
                'Mother of two children',
                'Police Clearance',
                'First Aid & CPR Certified',
                'Alberta Food Safety Course',
            ]
        },
        description: [
            "Kidz Paradize is a warm and welcoming day home for children ages 12 months to 12 years. Ms. Monika’s program is inspired by Reggio Emilia and Montessori approaches, allowing children to learn through play, exploration, and hands-on experiences. She follows a flexible daily routine that includes free play, guided learning, outdoor time, rest, and healthy meals. The children enjoy activities such as art, sensory exploration, music, storytelling, construction, and practical life skills. Open-ended learning materials are offered daily to spark creativity and curiosity.",
            "The children play outdoors every day and participate in activities that support their social and emotional development. With a background in nursing, Ms. Monika enjoys preparing healthy meals and snacks, as she believes good nutrition supports children’s growth, learning, and overall well-being. She also maintains open and consistent communication with families to ensure strong partnerships and trust.",
            "An important goal for Ms. Monika is to provide a safe and caring home environment where children can grow at their own pace. Her mission is to create a space where every child feels safe, confident, loved, and excited to learn."
        ]
    },
    {
        id: 2,
        name: "Ms. Jinal's Dayhome",
        location: "Sagehill Community NW, Calgary",
        ages: "Operating Hours: 7:30 am to 5:30 pm",
        images: ["/images/jinal1.jpg", "/images/jinal2.jpg", "/images/jinal3.jpg", "/images/jinal4.jpg"],
        educator: {
            name: "Ms. Jinal",
            certification: " Level 1 ECE Certification (currently on course to get Level 2 ECE Certification by 2026). ",
            qualifications: [
                'Licensed Professional Nurse',
                'Mother of one child',
                'Police Clearance',
                'First Aid & CPR Certified',
            ]
        },
        description: [
            "Ms. Jinal provides a warm, home-like environment where children can learn, play, and grow at their own pace. Her daily routine includes a balance of structured activities and free play such as crafts, storytelling, outdoor time, sensory exploration, music, and age-appropriate learning experiences.  Ms.Jinal is proud to offer fresh, homemade, healthy meals and snacks every day. She focuses on a balanced nutrition, using quality ingredients to prepare meals that support children’s growth and energy needs. Dietary requirements are accomodated when possible to ensure every child eats safely and healthily.  Ms. Jinal's goal is to create a nurturing space where every child feels included, supported, and excited to learn. She also values strong relationships with families and believe in open communication to support each child’s development."
        ]
    },

    {
        id: 3,
        name: "Active Kids Dayhome",
        location: "Coventry Community NE, Calgary",
        ages: "Operating Hours: 7:30 am to 5:30 pm",
        images: ["/images/active1.jpg", "/images/active2.jpg", "/images/active3.jpg", "/images/active4.jpg", ],
        educator: {
            name: " Ms. Himani",
            certification: "  Level 2 ECE Certification (currently on course to get Level 3 ECE Certification by 2026).",
            qualifications: [
                'Master’s in Microbiology',
                'Mother of one child',
                'Police Clearance',
                'First Aid & CPR Certified',
                'Alberta Food Safety Course',

            ]
        },
        description: [
                "Active Kids Day Home embraces an early childhood education philosophy inspired by the Reggio Emilia approach. We believe that every child has the right to experience high-quality care and learning, regardless of gender, religious beliefs, family background, or cultural identity.  We view children as capable learners, and we recognize that meaningful learning can happen anywhere and at any time. Our goal is to support the best possible outcomes for every child by fostering curiosity, independence, and a strong sense of belonging. All children attending Active Kids Day Home are lovingly guided through our flexible daily schedule according to their individual needs and readiness to participate. Children are never forced to take part in any activity; instead, they are invited and gently encouraged to explore new experiences in a warm, supportive environment. At Active Kids, we prioritize children’s health, safety, and overall well-being in every aspect of the day home environment. We cultivate a sense of citizenship, an appreciation for the natural world, and a love of beauty, creativity, fun, and wonder—values that shape confident, joyful learners."
        ]
    },

    {
        id: 4,
        name: "Dreamy Circles Dayhome",
        location: "Cornerstone Community NE, Calgary",
        ages: "Operating Hours: 7:30 am to 6:00 pm",
        images: ["/images/dreamy1.jpg", "/images/dreamy2.jpg", "/images/dreamy3.jpg", "/images/dreamy4.jpg",],
        educator: {
            name: " Ms. Sarbjit",
            certification: "  Level 2 ECE Certification (currently on course to get Level 3 ECE Certification by 2026).",
            qualifications: [
                'Bachelor’s Degree holder',
                'Mother of two children',
                'Police Clearance',
                'First Aid & CPR Certified',
            ]
        },
        description: [
            "Dreamy Circles Dayhome provides a safe, loving, and playful environment for young children. Ms. Sarbjit believes every child deserves a place where they can grow, explore, and truly feel at home.   Ms. Sarbjit provides a clean, smoke-free home with a small group setting for individualized attention. The daily activities support creativity, emotional, social, and physical development and include circle time, story time, sensory play, arts and crafts, outdoor play, and a balanced mix of structured and free-play activities. We offer kindergarten readiness for ages 3–5 and provide a cozy, calm space for nap or quiet time. Ms. Sarbjit serves healthy, homemade meals and snacks, including fresh fruits, veggies, and whole grains. Vegetarian options and all dietary needs are accommodated. Ms. Sarbjit offers a nurturing atmosphere filled with learning, creativity, and fun. Flexible hours are available for working parents."
        ]
    },

    {
        id: 5,
        name: "Ms. K's Dayhome",
        location: "Redstone Community NE, Calgary",
        ages: "Starting in January 2026",
        images: ["/images/msk1.jpg", ],
        educator: {
            name: "Ms. K's Day Home",
            certification: "Certification: Level 2 ECE Certification.",
            qualifications: [
                '5 years experience in Early Childhood Education',
                'Mother of two',
                'Police Clearance',
                'First Aid & CPR Certified',
            ]
        },
        description: [
            "Coming Soon",
        ]
    },
    {
        id: 6,
        name: "Ms. G's Day Home",
        location: "Cornerstone Community NE, Calgary",
        ages: "7:00 am to 6:00 pm",
        images: ["/images/msg1.jpg", ],
        educator: {
            name: "Ms. G's Day Home",
            certification: "Level 2 ECE Certification.",
            qualifications: [
                'Bachelor of Science Degree Holder',
                'Mother of one child',
                'Police Clearance',
                'First Aid & CPR Certified',
                'Two years experience in Early Childhood Education',
            ]
        },
        description: [
            "Coming Soon",
        ]
    },

])

const selectedHome = homes.value.find(h => h.name === route.query.name) || {
    name: 'Dayhome Not Found',
    location: '',
    ages: '',
    images: ["/images/placeholder1.jpg", "/images/placeholder2.jpg", "/images/placeholder3.jpg"],
    educator: { name: '', certification: '', qualifications: [] },
    description: ['No details available for this dayhome.']
}

const currentIndex = ref(0)

const nextImage = () => {
    currentIndex.value = (currentIndex.value + 1) % selectedHome.images.length
}

const prevImage = () => {
    currentIndex.value = (currentIndex.value - 1 + selectedHome.images.length) % selectedHome.images.length
}

onMounted(() => {
    const interval = setInterval(nextImage, 5000)
    onUnmounted(() => clearInterval(interval))
})
</script>