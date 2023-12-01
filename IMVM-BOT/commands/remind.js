// remind.js
const schedule = require('node-schedule');
const { SlashCommandBuilder } = require('@discordjs/builders');

module.exports = {
  data: new SlashCommandBuilder()
    .setName('remind')
    .setDescription('Set a reminder!')
    .addStringOption(option =>
      option.setName('reminder')
        .setDescription('Reminder you need')
        .setRequired(true))
    .addStringOption(option =>
      option.setName('date')
        .setDescription('The date when you want it to remind you (formato: DD-MM-AAAA HH:MM:SS)')
        .setRequired(true)),
  async execute(interaction) {
    const reminder = interaction.options.getString('reminder');
    let dateParts = interaction.options.getString('date').split(' ')[0].split('-');
    let timeParts = interaction.options.getString('date').split(' ')[1].split(':');

    if (dateParts.length === 3 && timeParts.length === 3) {
      let date = new Date(dateParts[2], dateParts[1] - 1, dateParts[0], timeParts[0], timeParts[1], timeParts[2]);

      if (!isNaN(date)) {
        schedule.scheduleJob(date, function(){
          interaction.user.send(`Reminder: ${reminder}`);
        });
        await interaction.reply('Reminder set!');
      } else {
        await interaction.reply('Please, choose a valid date!');
      }
    } else {
      await interaction.reply('Please, choose a valid date!');
    }
  },
};