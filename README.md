# imalittlefan
PolyHacks 2017 -> IoT dyson fan to google home integration 
IR Blaster -> https://github.com/bschwind/ir-slinger

## **Here's The whole Story:**
## Inspiration
Our strange urge to be lazy, lack of motivation.... wanted to do something cool
## What it does
**The original plan** was to use an Google home to Issue commands to a raspberry pi that would then control different devices that use Infer Red signal, in our case, the Dyson fan. We used the IR blaster, and sensor to create a project that would allow us to generate "widgets" for multi-device integration, would have been achieved by having a python "learn" script that would generate a list of codes and assign a integer to those codes. Once the new code was assigned, it would append that to the .php of the web app that would allow us to set an icon and name for each code. we had all the parts near complete and bad news. everything went south when our IR sensor stopped working. So it only made sense to go for gold! Hack our way the only way we knew how.. a **few cheat codes later**, a bit of 3D printing, some pixie dust, some hair pulling, and almost giving up on the whole idea, _Blamo_. We did a thing. This thing allows us to do just as we initially hoped, but just cut some fat along the edges. So **now what it does** it uses the google Home to send a text message to telegram via IFTTT which the pi is constantly listening to, the pi interprets these messages and does functions depending on what it sees, from there the pi makes the decisions , turn on a servo motor to press the power on the remote controller that came with the Dyson fan. This was achieved by 3D printing a arm that is lined up the remote and is actuated by the servo, turning the fan on. its clunky and has alot of latency, but it is more "inefficient",[sarcasm](http://bfy.tw/ot), and that was the goal. why do all the work when technology can do it for you. Benefit of having the telegram bot is now i can text any device I connect to this pi from any device I own what I want to do including the google home. Which makes this project extremely modular and very straight forward.


## Challenges we ran into
Alot of challenges seem to be with IR sensor, which we never did figure out quite how it works. Guess it will contiune to remain a dark art or sorcery to us. I mean before you know it we as a civilazation probably won't use it anymore everything is going to computers and wifi these days.
## Accomplishments that we're proud of
completing the project after hours of disappointing failure, 
## What we learned
That things only seem worse... and than you throw something together last minute because you spent 20 hours trying to get the broke thing to work... but it all works out for the best... or not, we'll see how the presentation goes.
## What's next for imalittlefan
Maybe a moderate sized fan, I mean I don't l know, kind of in a transition phase in my life, probably just ride the wave of life and see where it takes me. Hope to have a whole family of fans of my own some day.
