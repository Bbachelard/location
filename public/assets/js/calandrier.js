const DAY_LABELS = ['S', 'M', 'T', 'W', 'Th', 'F', 'S'];
const MONTH_LABELS = [
        "January", "February", "March",
        "April", "May", "June",
        "July", "August", "September",
        "October", "November", "December"];

const Calendar = Vue.component('calendar', {
  template: "#calendar",
  data() {
    return {
      today: null,
      selectedDate: null,
      currDateCursor: null,
      dayLabels: null,
    };
  },
  created() {
    this.dayLabels = DAY_LABELS.slice();
    const today = new Date();
    this.selectedDate = today;
    this.currDateCursor = today;
  },
  props: {
    startDate: {
      required: false,
      type: Date,
    }
  },
  computed: {
    currentMonth() {
      return this.currDateCursor.getMonth();
    },
    currentYear() {
      return this.currDateCursor.getFullYear();
    },
    currentMonthLabel() {
      return MONTH_LABELS[this.currentMonth];
    },
    dates() {
      const cursorDate = this.currDateCursor;
      let startDate = dateFns.startOfMonth(cursorDate);
      const daysNeededForLastMonth = dateFns.getDay(startDate);
      startDate = dateFns.addDays(startDate, -daysNeededForLastMonth);
      
      // always generate 6 full weeks to keep the formatting consistent
      let endDate = dateFns.addDays(startDate, 41);
      
      return dateFns.eachDay(startDate, endDate).map(date => ({
        date,
        isCurrentMonth:  dateFns.isSameMonth(cursorDate, date),
        isToday: dateFns.isToday(date),
        isSelected: dateFns.isSameDay(this.selectedDate, date)  
      }));
    },
  },
  mounted() {
    if (this.startDate) {
      this.currDateCursor = this.startDate;
      this.selectedDate = this.startDate;
    }
  },
  methods: {
    dayClassObj(day) {
      return {
        'today' : day.isToday,
        'current': day.isCurrentMonth,
        'selected': day.isSelected,
      };
    },
    nextMonth() {
      this.currDateCursor = dateFns.addMonths(this.currDateCursor, 1);
    },
    previousMonth() {
      this.currDateCursor = dateFns.addMonths(this.currDateCursor, -1);
    },
    setSelectedDate(day) {
      this.selectedDate = day.date;
      this.$emit('input', this.selectedDate);
      // change calendar to correct month if they select previous or next month's days
      if (!day.isCurrentMonth) {
        const selectedMonth = dateFns.getMonth(this.selectedDate);
        this.currDateCursor = dateFns.setMonth(this.currDateCursor, selectedMonth);
      }
    }
  },
  filters: {
    formatDateToDay(val) {
      return dateFns.format(val, 'D');
    }
  },
});

new Vue({
  el: '#app',
  components: {
    Calendar,
  },
  data: {
    curr: new Date(),
  },
  computed: {
    formattedDate() {
      return dateFns.format(this.curr, 'MM/DD/YYYY');
    }
  },
});