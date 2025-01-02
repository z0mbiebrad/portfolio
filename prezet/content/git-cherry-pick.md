---
title: How to Move Commits from `main` to Another Branch in Git
excerpt: Learn how to move commits mistakenly made on the `main` branch to another branch using Git's cherry-pick and reset commands.
slug: move-commits-git-cherry-pick  
date: 2025-01-01  
category: git-tutorials  
image: prezet/images/git-cherry-pick-tutorial.jpg  
---


Sometimes we accidentally commit changes to the `main` branch instead of working on a feature branch. It happens to the best of us! If you've made several commits to `main` and need to move them to an existing or new branch, here's a step-by-step guide to fix it.

---

## Scenario
You’ve made **6 commits** to `main` but meant to commit them to a branch (let's call it `feature-branch`). Now, you want to:
- Move those 6 commits to `feature-branch`.
- Reset `main` to its previous state.

---

## Step-by-Step Guide

### 1. Switch to the Target Branch
If the branch where you want to move the commits already exists, switch to it:

```bash
git checkout feature-branch
```

If the branch doesn’t exist, create it and switch:

```bash
git checkout -b feature-branch
```

### 2. Cherry-Pick the Commits

Identify the commits you want to move. Run:

```bash
git log --oneline main
```

This will list recent commits on main. Find the last 6 commits and note their hashes.

Now, cherry-pick the commits onto feature-branch:

```bash
git cherry-pick <commit_hash_1> <commit_hash_2> <commit_hash_3> <commit_hash_4> <commit_hash_5> <commit_hash_6>
```

This applies the commits to feature-branch.

### 3. Reset the main Branch

Switch back to main:

```bash
git checkout main
```

Find the commit hash just before the first of the 6 commits you want to move. Then reset main to that point:

```bash
git reset --hard <commit_hash_before_the_6_commits>
```

Warning: The --hard option will discard changes in your working directory, so ensure you’ve moved everything important to feature-branch first.

### 4. Push the Changes

Since the history of main has been rewritten, you’ll need to force push it to the remote repository:

```bash
git push --force
```
There you go! You have a "clean" `main` branch, and your working branch has the commits that you wanted!

Moving commits between branches in Git can seem daunting, but with tools like cherry-pick and reset, you can fix mistakes cleanly. Remember to double-check your commit hashes and use force-push carefully when rewriting history.

Happy coding!