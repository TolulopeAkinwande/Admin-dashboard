<!-- pages/admin/dayhomes/index.vue -->
<template>
  <div class="min-h-screen bg-gray-50/50">
    <!-- Stats row -->
    <div class="grid grid-cols-1 sm:grid-cols-3 gap-5 px-6 pt-8 pb-10">
      <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm text-gray-600 font-medium">Total number of homes</p>
            <p class="text-3xl font-bold text-gray-900 mt-1">10</p>
          </div>
          <div class="w-14 h-14 rounded-xl bg-blue-50 flex items-center justify-center text-blue-600">
            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
            </svg>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm text-gray-600 font-medium">Active dayhomes</p>
            <p class="text-3xl font-bold text-gray-900 mt-1">6</p>
          </div>
          <div class="w-14 h-14 rounded-xl bg-green-50 flex items-center justify-center text-green-600">
            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
            </svg>
          </div>
        </div>
      </div>

      <div class="bg-white rounded-xl p-6 shadow-sm border border-gray-200">
        <div class="flex items-center justify-between">
          <div>
            <p class="text-sm text-gray-600 font-medium">Inactive dayhomes</p>
            <p class="text-3xl font-bold text-gray-900 mt-1">4</p>
          </div>
          <div class="w-14 h-14 rounded-xl bg-red-50 flex items-center justify-center text-red-600">
            <svg class="w-7 h-7" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636" />
            </svg>
          </div>
        </div>
      </div>
    </div>

    <div class="px-6 pb-10">
      <!-- Header + Search + Add -->
      <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-5 mb-8">
        <h1 class="text-3xl font-semibold text-[#4a3c31]">Dayhomes</h1>

        <div class="flex flex-col sm:flex-row items-stretch sm:items-center gap-4">
          <div class="relative w-full sm:w-80">
            <input
              type="text"
              placeholder="Search by name or location..."
              class="w-full pl-10 pr-4 py-2.5 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-green-500/30 focus:border-green-600 text-gray-700"
            />
            <div class="absolute left-3 top-1/2 -translate-y-1/2 text-gray-400 pointer-events-none">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
              </svg>
            </div>
          </div>

          <button class="bg-green-600 hover:bg-green-700 text-white px-5 py-2.5 rounded-lg font-medium flex items-center justify-center gap-2 transition-colors whitespace-nowrap">
            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4" />
            </svg>
            Add Dayhome
          </button>
        </div>
      </div>

      <!-- Tabs -->
      <div class="flex gap-2 mb-6 flex-wrap">
        <button class="px-5 py-2 rounded-lg font-medium bg-green-600 text-white">All</button>
        <button class="px-5 py-2 rounded-lg font-medium text-gray-600 hover:bg-gray-100 transition-colors">Drafts</button>
        <button class="px-5 py-2 rounded-lg font-medium text-gray-600 hover:bg-gray-100 transition-colors">Active</button>
        <button class="px-5 py-2 rounded-lg font-medium text-gray-600 hover:bg-gray-100 transition-colors">Inactive</button>
      </div>

      <!-- Table -->
      <div class="bg-white rounded-xl shadow-sm border border-gray-200 overflow-hidden">
        <div class="overflow-x-auto">
          <table class="w-full min-w-[960px]">
            <thead class="bg-gray-50 border-b border-gray-200">
              <tr>
                <th class="px-8 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider w-5/12">DAYHOME NAME</th>
                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider w-2/12">EDUCATOR</th>
                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider w-2/12">LOCATION</th>
                <th class="px-6 py-4 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider w-1/12">STATUS</th>
                <th class="px-6 py-4 text-right text-xs font-semibold text-gray-600 uppercase tracking-wider w-1/12 pr-8">ACTIONS</th>
              </tr>
            </thead>
            <tbody class="divide-y divide-gray-100">
              <tr v-for="item in dayhomes" :key="item.id" class="hover:bg-gray-50 transition-colors">
                <td class="px-8 py-5">
                  <div class="flex items-center gap-3">
                    <div :class="['w-10 h-10 rounded-lg flex items-center justify-center text-white font-medium', item.color]">
                      {{ item.initial }}
                    </div>
                    <div>
                      <div class="font-medium text-gray-900">{{ item.name }}</div>
                      <div class="text-sm text-gray-500 mt-0.5">{{ item.owner }}</div>
                    </div>
                  </div>
                </td>
                <td class="px-6 py-5 text-gray-700">{{ item.educator }}</td>
                <td class="px-6 py-5 text-gray-600">
                  <div>{{ item.location }}</div>
                  <div class="text-sm text-gray-500">Alberta, Canada</div>
                </td>
                <td class="px-6 py-5">
                  <span
                    :class="[
                      'inline-flex px-3 py-1 text-xs font-medium rounded-full',
                      item.status === 'Active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'
                    ]"
                  >
                    {{ item.status }}
                  </span>
                </td>
                <td class="px-6 py-5 text-right pr-8">
                  <button class="text-gray-400 hover:text-gray-600 transition-colors">
                    <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 5v.01M12 12v.01M12 19v.01M12 6a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2zm0 7a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>

        <!-- Pagination footer -->
        <div class="px-8 py-4 border-t border-gray-200 flex items-center justify-between text-sm text-gray-600">
          <div>Showing 1 to 10 results</div>
          <div class="flex items-center gap-2">
            <button class="p-1 rounded hover:bg-gray-100 disabled:opacity-40" disabled>
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
              </svg>
            </button>
            <button class="px-3 py-1 rounded bg-green-50 text-green-700 font-medium">1</button>
            <button class="px-3 py-1 rounded hover:bg-gray-100">2</button>
            <button class="px-3 py-1 rounded hover:bg-gray-100">3</button>
            <button class="p-1 rounded hover:bg-gray-100">
              <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
              </svg>
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

<script setup>
const dayhomes = [
  { id: 1, initial: 'L', color: 'bg-blue-500', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Anne K.', location: 'Calgary SW', status: 'Active' },
  { id: 2, initial: 'L', color: 'bg-pink-500', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Jane', location: 'Calgary SW', status: 'Inactive' },
  { id: 3, initial: 'L', color: 'bg-purple-500', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Wendy', location: 'Calgary SW', status: 'Active' },
  { id: 4, initial: 'M', color: 'bg-teal-500', name: "Ms. Monika's Dayhome", owner: 'Ms. Monika', educator: 'Bessie', location: 'Calgary SW', status: 'Active' },
  { id: 5, initial: 'L', color: 'bg-green-600', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Gloria', location: 'Calgary SW', status: 'Inactive' },
  { id: 6, initial: 'L', color: 'bg-amber-500', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Priscilla', location: 'Calgary SW', status: 'Active' },
  { id: 7, initial: 'L', color: 'bg-indigo-500', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Courtney', location: 'Calgary SW', status: 'Active' },
  { id: 8, initial: 'L', color: 'bg-cyan-500', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Bessie', location: 'Calgary SW', status: 'Active' },
  { id: 9, initial: 'L', color: 'bg-rose-500', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Theresa', location: 'Calgary SW', status: 'Inactive' },
  { id: 10, initial: 'L', color: 'bg-orange-500', name: 'Little Blossoms Dayhome', owner: 'Ms. Monika', educator: 'Priscilla', location: 'Calgary SW', status: 'Inactive' },
]
</script>