---
title: The Twelve-Factor app?
date: 2019-07-12 06:23:16
categories: weblog cloud devops scaling
---

A colleague of mine made me aware of a website called [The Twelve-Factor app](https://12factor.net/).
Apparenty, some enineers at [Heroku](https://www.heroku.com/) felt the need
to consolidate their understanding building software-as-a-service apps.

> Our motivation is to raise awareness of some systemic problems we’ve seen in modern application development, to provide a shared vocabulary for discussing those problems, and to offer a set of broad conceptual solutions to those problems with accompanying terminology. The format is inspired by Martin Fowler’s books Patterns of Enterprise Application Architecture and Refactoring.

It's not neccesarily anything new, but I agree with the allmost all of concepts and how they are described there.

Therefore, I highly recommend the site to anyone new to the topic or as a starting point to understand any of the 12 factors:

1. Codebase - One codebase tracked in revision control, many deploys
2. Dependencies - Explicitly declare and isolate dependencies
3. Config - Store config in the environment
4. Backing services - Treat backing services as attached resources
5. Build, release, run - Strictly separate build and run stages
6. Processes - Execute the app as one or more stateless processes
7. Port binding - Export services via port binding
8. Concurrency - Scale out via the process model
9. Disposability - Maximize robustness with fast startup and graceful shutdown
10. Dev/prod parity - Keep development, staging, and production as similar as possible
11. Logs - Treat logs as event streams
12. Admin processes - Run admin/management tasks as one-off processes
