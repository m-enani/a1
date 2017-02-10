<?php
/*
Created by: Mahmoud Enani
Class: CSCI E-15
Assignment: Assignment 1
Completed: 02/09/2017
Purpose: To store quote and randomly pick one for display on page
*/

# array to store quotes
$quotes = [
  "Your work is going to fill a large part of your life, and the only way to be truly satisfied is to do what you believe
	is great work. And the only way to do great work is to love what you do. If you haven't found it yet, keep looking.
	Don't settle. As with all matters of the heart, you'll know when you find it." . "<br>" . "<br>" . "-STEVE JOBS",
  "It is not the critic who counts; not the man who points out how the strong man stumbles,
	or where the doer of deeds could have done them better. The credit belongs to the man who is actually in the arena,
	whose face is marred by dust and sweat and blood; who strives valiantly; who errs, who comes short again and again,
	because there is no effort without error and shortcoming; but who does actually strive to do the deeds; who knows
	great enthusiasms, the great devotions; who spends himself in a worthy cause; who at the best knows in the end the
	triumph of high achievement, and who at the worst, if he fails, at least fails while daring greatly, so that his
	place shall never be with those cold and timid souls who neither know victory nor defeat." . "<br>" . "<br>" . "-THEODORE ROOSEVELT",
	"The important thing is not to stop questioning. Curiosity has its own reason for existing." . "<br>" . "<br>" . "-ALBERT EINSTEIN",
  "I don’t think of all the misery but of the beauty that still remains." . "<br>" . "<br>" . "-ANNE FRANK",
  "Great minds discuss ideas; average minds discuss events; small minds discuss people." . "<br>" . "<br>" . "-ELEANOR ROOSEVELT"
];

# randomly select from 5 available quotes
$random = $quotes[rand ( 0 , 4)];
