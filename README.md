# Food4Kids-Store
> ⚠️ This is a Hackathon entry for DeltaHacks V, and was created in under 24 hours. The code in this repo is likely to be hacky and potentially unstable/insecure, so please be careful if forking this repo. [You can view the project's Devpost page here.](https://devpost.com/software/food-4-kids-hamilton)

## Inspiration
In the region of Hamilton, roughly **1,300 children** go through each weekend without food.  This was extremely shocking to us, as it was hard to believe that this is occurring in our very community.  Determined to help the children in need, we decided to  take on **Food4KidsHamilton's** challenge, and ultimately try and reduce the this issue.

## What it does
We developed a _unique_ and _interactive_ method to process donations.  Bags of food for the children is filled with the click of a button, and the contents is tracked on the right hand side of the screen.  The web page has a counter implemented to track the total amount they'll be donating and the number of children they will help feed.  We wanted the donor to know that their donation was truly going to a good cause.  To achieve this, real testimonies were included after the check out page to make this personal connection.  

## How we built it
We built our website using basic web technologies - HTML, CSS, JavaScript and PHP, with MySQL powering the database. This was a conscious decision - we wanted to ensure that the product we created could easily be used by Food4Kids, and these technologies are widely supported on shared hosting services. Our demo server is hosted on Google Cloud, and we built our own custom API to handle retrieving data from database.  Stripe was used to process the payments, and once complete, the user is taken to a page thanking them for their generous donation, and giving them the option to share with Facebook and Twitter.

## Challenges we ran into
> Entering Delta Hacks with no prior knowledge of php, I found the syntax hard to grasp at first.  I have not worked with a lot of back-end development in the past, so it took me a while to understand the concepts. **- David**

> The design of the site was a pretty big design challenge. We wanted something that looked clean, but also fitted with the charity's current brand. Handling the front-end for Stripe was also something I hadn't done before. **- Jack**

> Setting up the server, even with the convenience of Google Cloud Platform, was still a very steep learning curve for a first-timer like myself. I had to pick up a lot of skills and learn a couple of new programs along the way. **- Julian**

> As a first-time hacker who had never used PHP, I had a bit of a challenge learning to fuse HTML,CSS,JS, and PHP for web development. Rapidly switching between the languages with minor syntax differences lead to some silly mistakes. **- Evan**

## Accomplishments that we're proud of
> I'm proud that our group submitted a functional donations web page, which can be used to help children in need.
 **- David**

> I'm really pleased with the UX of the store - it feels really easy to use, and actually makes you feel satisfied when you add things to the bag. **- Jack**

> I'm especially proud that we managed to implement a payment service (Stripe) to any extent using a language that most of us hadn't ever touched before today. **- Julian**

> I'm proud of myself for wrapping my mind around how to dynamically create HTTP objects based on a JSON from our server, and I'm proud of my group for working so well together to create something well above my expectations! **- Evan**

## What we learned
> I learned that persistence is key when using a brand new language.  Using php for the first time was definitely a challenge, but I was able to understand the basics by the end of it.  I also learned how to set up our own APIs, which was quite neat.  **- David**

> I learned more about CSS animations, and how to build a great looking UI. Additionally, I learned how awful PHP's font support is. **- Jack**

> I learned so much about server setup and maintenance, as well as some fundamentals of PHP and APIs. A lot about basic web development! **- Julian**

> I learned that PHP is a wonderfully interesting magical language, with some caveats. I also learned from Jack about the bounty of colour-coordination websites out there, and how useful they can be. **- Evan**

## What's next for Food 4 Kids Hamilton
In the future, we hope have a **weekly goal** (number of bags for the week), or a top donor list will also help _encourage_ people to donate.
