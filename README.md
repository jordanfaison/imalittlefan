# imalittlefan
PolyHacks 2017 -> IoT dyson fan to google home integration 
IR Blaster -> https://github.com/bschwind/ir-slinger
Check out our MLH Devpost, we won best hardware!
https://devpost.com/software/imalittlefan
## Inspiration
Our strange urge to be lazy, lack of motivation....and wanted to do something cool
## What it does
**The original plan** was to use a Google home to issue commands to a raspberry pi that would then control different devices that use Infer Red signals. With a proof of concept using a Dyson fan. We used the IR blaster and sensor to create a project that would allow us to generate "widgets" for multi-device integration. This would have been achieved by having a python "learn" script that would generate a list of codes and assign a integer to those codes. Once the new code was assigned, it would append that to the .php of the web app that would allow us to set an icon and name for each code. We had all the parts near complete...but then everything went south when our IR sensor stopped working. So it only made sense to go for gold! Hack our way, the only way we knew how. A **few cheat codes later**,  a bit of 3D printing, some pixie dust, some hair pulling, and almost giving up on the whole idea, _Blamo_, we did a thing. This thing allows us to do just as we initially hoped, but just cut some fat along the edges. So **now what it does.** It uses the Google Home to send a text message to telegram via IFTTT, which the pi is constantly listening to. Then the pi interprets these messages and does functions depending on what it sees. From there, the pi makes the decisions and turns on a servo motor to press the power on the remote controller that came with the Dyson fan. This was achieved by 3D printing a arm that is lined up the remote and is actuated by the servo, turning the fan on. It's clunky and has a lot of latency, but it is more "inefficient", [sarcasm](http://bfy.tw/ot), and that was the goal. Why do all the work when technology can do it for you? The benefit of having the telegram bot is now I can text any device I connect to this pi from any device I own what I want to do including the Google home. Which makes this project extremely modular and very straight forward. Feeling hot and too lazy to get up? Just ask your Google Home to send a text message to your fan and there you go! You're welcome.


## Challenges we ran into
A lot of challenges seem to be with IR sensor, which we never did figure out quite how it works. Guess it will continue to remain a dark art and sorcery to us. I mean before you know it we as a civilization probably won't use it anymore. Everything is going to computers and wifi these days. 
## Accomplishments that we're proud of
Completing the project after hours of disappointing failure. Indeed.
## What we learned
The one thing that Pinocchio teaches us, is that things only seem worse... and then you throw something together last minute because you spent 20 hours trying to get the broke thing to work... but it all works out for the best... or not. We'll see how the presentation goes.
## What's next for imalittlefan
Maybe a moderate sized fan.  So many fans out there![see for yourself](https://www.walmart.com/search/?query=fans). I mean I don't l know, I'm kind of in a transition phase in my life, probably just ride the wave of life and see where it takes me. Hope to have a whole family of fans of my own some day. Maybe marry one. We will be an intersting look child.
